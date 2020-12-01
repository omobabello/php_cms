<?php
defined('BASEPATH') or exit('No direct access allowed');

class Api extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function login()
    {
        $user = $this->db->where('email', $this->input->post('email'))->get('users')->row();
        if (empty($user)) {
            $this->load->view('login', array('message' => '<p class="alert alert-danger">Invalid Username</p>'));
        } else {
            if (password_verify($this->input->post('password'), $user->password)) {
                $this->session->set_userdata(array(
                    'loggedIn' => TRUE,
                    'user_id' => $user->user_id
                ));
                redirect('views');
            } else {
                $this->load->view('login', array('message' => '<p class="alert alert-danger">Invalid Password</p>'));
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(array('loggedIn', 'user_id'));
        redirect('views');
    }

    public function getBanners()
    {
        echo json_encode($this->db->where('user_id', $this->session->user_id)->get('banners')->result());
    }

    public function uploadBanner($banner)
    {
        $this->load->library('upload', array(
            'upload_path' => './assets/uploads/banners',
            'allowed_types' => 'jpg|png|gif|jpeg',
            'overwrite' => TRUE,
            'file_name' => "{$banner}_banner"
        ));

        if ($this->upload->do_upload('image')) {
            $code = $banner == 'home-page' ? strtoupper(substr(uniqid('B'), 0, 11)) : strtoupper($banner);
            $this->db->replace('banners', array(
                'user_id' => $this->session->user_id,
                'page' => $banner,
                'code' => $code,
                'title' => $this->input->post('title'),
                'sub_title' => $this->input->post('subtitle'),
                "link" => assets_url("uploads/banners/{$this->upload->data('file_name')}")
            ));
            echo json_encode(array(
                'status' => TRUE,
                'file' => assets_url("uploads/banners/{$this->upload->data('file_name')}"),
                'banners' => $this->db->where('user_id', $this->session->user_id)->where('page', 'home-page')->get('banners')->result()
            ));
        } else {
            echo json_encode(array('status' => FALSE, 'message' => $this->upload->display_errors()));
        }
    }

    public function removeBanner($serial)
    {
        echo json_encode(array('status' => $this->db->where('serial', $serial)->delete('banners')));
    }

    public function getSocialLinks()
    {
        echo json_encode(
            $this->db->where('user_id', $this->session->user_id)
                ->get('social_links')->row()
        );
    }

    public function addSocialLinks()
    {
        echo json_encode(array('status' => $this->db->replace('social_links', array(
            'user_id' => $this->session->user_id,
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'instagram' => $this->input->post('instagram'),
            'linked_in' => $this->input->post('linkedIn'),
        ))));
    }

    public function getFooterContents()
    {
        echo json_encode($this->db->where('user_id', $this->session->user_id)->get('footer_contents')->row());
    }

    public function addFooterContents()
    {
        echo json_encode(array('status' => $this->db->replace('footer_contents', array(
            'user_id' => $this->session->user_id,
            'about' => $this->input->post('about'),
            'credits' => $this->input->post('credit')
        ))));
    }

    public function getServices()
    {
        echo json_encode($this->db->get('services')->result());
    }

    public function addService()
    {
        $file_name = substr(strtoupper(uniqid('I')), 0, 15);

        $this->load->library('upload', array(
            'upload_path' => './assets/uploads/services',
            'allowed_types' => 'jpg|png|gif|jpeg',
            'file_name' => $file_name
        ));

        $this->upload->do_upload('image');

        echo json_encode(array(
            'status' => $this->db->insert('services', array(
                'user_id' => $this->session->user_id,
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'details' => $this->input->post('details'),
                'image' => assets_url("uploads/services/{$file_name}")
            )), 'services' => $this->db->get('services')->result()
        ));
    }

    public function RemoveService()
    {
        echo json_encode(array(
            'status' => $this->db->where('serial', $this->input->post('serial'))->delete('services')
        ));
    }

    public function getFaqs()
    {
        $res = $this->db->get('faqs')->result();
        $data = [];
        $count = 0;
        foreach ($res as $r) {
            $data[] = array(
                ++$count, $r->title, $r->article,
                "<button class='btn btn-sm btn-primary' onclick=editFaq({$r->serial})><i class='zmdi zmdi-edit'></i></button> 
            <button class='btn btn-sm btn-danger' onclick=deleteFaq({$r->serial})><i class='zmdi zmdi-delete'></i></button>"
            );
        }

        echo json_encode(array(
            'data' => $data,
            "draw" => $this->input->post('draw'),
            "recordsTotal" => count($data),
            "recordsFiltered" => count($data),
        ));
    }

    public function getFaq($serial)
    {
        echo json_encode($this->db->where('serial', $serial)->get('faqs')->row());
    }

    public function addFaq()
    {
        echo json_encode(array(
            'status' => $this->db->insert('faqs', array(
                'user_id' => $this->session->user_id,
                'title' => $this->input->post('title'),
                'article' => $this->input->post('article'),
                'date' => date('Y-m-d H:i:s')
            ))
        ));
    }

    public function editFaq($serial)
    {
        echo json_encode(array(
            'status' => $this->db->where('serial', $serial)
                ->update('faqs', array(
                    'title' => $this->input->post('title'),
                    'article' => $this->input->post('article')
                ))
        ));
    }

    public function deleteFaq()
    {
        echo json_encode(array(
            'status' => $this->db->where('serial', $this->input->post('serial'))->delete('faqs')
        ));
    }

    public function getPricings()
    {
        $res = $this->db->get('pricing')->result();
        $data = [];
        $count = 0;
        foreach ($res as $r) {
            $data[] = array(
                $r->title, "{$r->currency} {$r->amount} / {$r->duration}", str_replace(',', '<br/>', $r->description),
                "<button class='btn btn-sm btn-primary' onclick=editPricing({$r->serial})><i class='zmdi zmdi-edit'></i></button> 
            <button class='btn btn-sm btn-danger' onclick=deletePricing({$r->serial})><i class='zmdi zmdi-delete'></i></button>"
            );
        }

        echo json_encode(array(
            'data' => $data,
            "draw" => $this->input->post('draw'),
            "recordsTotal" => count($data),
            "recordsFiltered" => count($data),
        ));
    }

    public function getPricing($serial)
    {
        echo json_encode($this->db->where('serial', $serial)->get('pricing')->row());
    }

    public function addPricing()
    {
        echo json_encode(array(
            'status' => $this->db->insert('pricing', array(
                'user_id' => $this->session->user_id,
                'title' => $this->input->post('title'),
                'currency' => $this->input->post('currency'),
                'duration' => $this->input->post('duration'),
                'amount' => $this->input->post('amount'),
                'description' => $this->input->post('description'),
                'date' => date('Y-m-d H:i:s')
            ))
        ));
    }

    public function editPricing($serial)
    {
        echo json_encode(array(
            'status' => $this->db->where('serial', $serial)
                ->update('pricing', array(
                    'title' => $this->input->post('title'),
                    'currency' => $this->input->post('currency'),
                    'duration' => $this->input->post('duration'),
                    'amount' => $this->input->post('amount'),
                    'description' => $this->input->post('description'),
                ))
        ));
    }

    public function deletePricing($serial)
    {
        echo json_encode(array('status' => $this->db->where('serial', $serial)->delete('pricing')));
    }

    public function getPricingArticles()
    {
        $res = $this->db->get('pricing_article')->result();
        $data = [];
        $count = 0;
        foreach ($res as $r) {
            $data[] = array(
                ++$count, $r->title, $r->article,
                "<button class='btn btn-sm btn-primary' onclick=editArt({$r->serial})><i class='zmdi zmdi-edit'></i></button> 
            <button class='btn btn-sm btn-danger' onclick=deleteArt({$r->serial})><i class='zmdi zmdi-delete'></i></button>"
            );
        }

        echo json_encode(array(
            'data' => $data,
            "draw" => $this->input->post('draw'),
            "recordsTotal" => count($data),
            "recordsFiltered" => count($data),
        ));
    }

    public function getPricingArticle($serial)
    {
        echo json_encode($this->db->where('serial', $serial)->get('pricing_article')->row());
    }

    public function addPricingArticle()
    {
        echo json_encode(array(
            'status' => $this->db->insert('pricing_article', array(
                'user_id' => $this->session->user_id,
                'title' => $this->input->post('title'),
                'article' => $this->input->post('article'),
                'date' => date('Y-m-d H:i:s')
            ))
        ));
    }

    public function deletePricingArticle($serial)
    {
        echo json_encode(array('status' => $this->db->where('serial', $serial)->delete('pricing_article')));
    }

    public function editPricingArticle($serial)
    {
        echo json_encode(array(
            'status' => $this->db->where('serial', $serial)
                ->update('pricing_article', array(
                    'title' => $this->input->post('title'),
                    'article' => $this->input->post('article')
                ))
        ));
    }

    public function getContact()
    {
        echo json_encode($this->db->where('user_id', $this->session->user_id)->get('contact')->row());
    }

    public function addContact()
    {
        echo json_encode(
            array('status' => $this->db->replace('contact', array(
                'user_id' => $this->session->user_id,
                'address' => $this->input->post('address'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'hours' => $this->input->post('hours'),
                'website' => $this->input->post('website'),
                'title' => $this->input->post('title'),
                'article' => $this->input->post('article'),
                'date' => date('Y-m-d H:i:s')
            )))
        );
    }

    public function getBlog()
    {
        echo json_encode($this->db->where('user_id', $this->session->user_id)->get('blog')->row());
    }

    public function addBlog()
    {
        echo json_encode(array(
            'status' => $this->db->replace(
                'blog',
                array(
                    'user_id' => $this->session->user_id,
                    'blog_link' => $this->input->post('blog_link')
                )
            )
        ));
    }

    public function addAboutSection($section)
    {
        switch ($section) {
            case 'section-one':
            case 'section-two':
                $code = $section == 'section-one' ? 'AAAAAAAAAAA' : 'BBBBBBBBBBB';
                echo json_encode(
                    array(
                        'status' => $this->db->replace('about', array(
                            'user_id' => $this->session->user_id,
                            'section' => $section,
                            'section_code' => $code,
                            'title' => $this->input->post('title', TRUE),
                            'article' => $this->input->post('article', TRUE),
                            'date' => date('Y-m-d H:i:s')
                        ))
                    )
                );
                break;
            case 'section-three':
                $file_name = NULL;
                if ($_FILES['file']) {

                    $this->load->library('upload', array(
                        'upload_path' => './assets/uploads/services',
                        'allowed_types' => 'jpg|png|gif|jpeg',
                        'overwrite' => TRUE,
                        'file_name' => "section_c"
                    ));

                    $this->upload->do_upload('file');
                    $file_name = assets_url("uploads/services/{$this->upload->data('file_name')}");
                }

                echo json_encode(
                    array(
                        'status' => $this->db->replace('about', array(
                            'user_id' => $this->session->user_id,
                            'section' => $section,
                            'section_code' => 'CCCCCCCCCCC',
                            'title' => $this->input->post('title', TRUE),
                            'article' => $this->input->post('article', TRUE),
                            'video_url' => $this->input->post('video_url', TRUE),
                            'image_url' => $file_name,
                            'date' => date('Y-m-d H:i:s')
                        ))
                    )
                );
                break;
            case 'section-four':
                $file_name = NULL;
                if (isset($_FILES['file'])) {

                    $this->load->library('upload', array(
                        'upload_path' => './assets/uploads/services',
                        'allowed_types' => 'jpg|png|gif|jpeg',
                        'overwrite' => TRUE,
                        'file_name' => "section_d"
                    ));

                    $this->upload->do_upload('file');
                    $file_name = assets_url("uploads/services/{$this->upload->data('file_name')}");
                }

                echo json_encode(
                    array(
                        'status' => $this->db->replace('about', array(
                            'user_id' => $this->session->user_id,
                            'section' => $section,
                            'section_code' => 'DDDDDDDDDDD',
                            'title' => $this->input->post('title', TRUE),
                            'article' => $this->input->post('article', TRUE),
                            'image_url' => $file_name,
                            'date' => date('Y-m-d H:i:s')
                        )), 'files' => $_FILES
                    )
                );
                break;
            case 'sponsor-logo':
                $this->load->library('upload', array(
                    'upload_path' => './assets/uploads/logos',
                    'allowed_types' => 'jpg|png|gif|jpeg',
                    'overwrite' => TRUE,
                ));

                $this->upload->do_upload('file');
                $file_name = assets_url("uploads/logos/{$this->upload->data('file_name')}");

                echo json_encode(
                    array('status' => $this->db->replace('about', array(
                        'user_id' => $this->session->user_id,
                        'section' => $section,
                        'section_code' => strtoupper(substr(uniqid('E'), 0, 11)),
                        'image_url' => $file_name,
                        'date' => date('Y-m-d H:i:s')
                    )), 'logos' => $this->db->where('section', 'sponsor-logo')->where('user_id', $this->session->user_id)->get('about')->result())
                );

                break;
        }
    }

    public function loadAboutContent()
    {
        $user_id = $this->session->user_id;
        echo json_encode(
            array(
                's1' => $this->db->where('section', 'section-one')->where('user_id', $user_id)->get('about')->row(),
                's2' => $this->db->where('section', 'section-two')->where('user_id', $user_id)->get('about')->row(),
                's3' => $this->db->where('section', 'section-three')->where('user_id', $user_id)->get('about')->row(),
                's4' => $this->db->where('section', 'section-four')->where('user_id', $user_id)->get('about')->row(),
                'logos' => $this->db->where('section', 'sponsor-logo')->where('user_id', $user_id)->get('about')->result(),
                'banner' => $this->db->where('user_id', $user_id)->where('page', 'about')->get('banners')->row()->link,
            )
        );
    }

    public function removeLogo()
    {
        $logo = $this->db->where('serial', $this->input->post('logo'))->get('about')->row();
        $this->db->where('serial', $logo->serial)->delete('about');
        //insert delete file here;
    }

    public function exportNewsLetter()
    {
        $emails = $this->db->select('email')->get('newsletter')->result();
        $mails = '';
        foreach ($emails as $m) {
            $mails .= "{$m->email} \n";
        }
        echo json_encode(trim($mails, '\n'));
    }

    public function getHomeContents()
    {
        $user_id = $this->session->user_id;
        echo json_encode(
            array(
                'tests' => $this->db->where('user_id', $user_id)->get('testimonials')->result(),
                'sec1Left' => $this->db->where('user_id', $user_id)->get('home_s1_left')->row(),
                'accords' => $this->db->where('user_id', $this->session->user_id)->get('accordions')->result(),
                'grids' => $this->db->where('user_id', $this->session->user_id)->get('home_grid_image')->result(),
                'banners' => $this->db->where('user_id', $this->session->user_id)->where('page', 'home-page')->get('banners')->result()
            )
        );
    }


    public function addHomeS1Left()
    {
        echo json_encode(
            array(
                'status' => $this->db->replace('home_s1_left', array(
                    'user_id' => $this->session->user_id,
                    'title' => $this->input->post('header', TRUE),
                    'paragraph' => $this->input->post('paragraph', TRUE),
                    'bullets' => $this->input->post('bullets', TRUE),
                    'date' => date('Y-m-d H:i:s')
                ))
            )
        );
    }

    public function addAccordion()
    {
        echo json_encode(
            array(
                'status' => $this->db->insert('accordions', array(
                    'user_id' => $this->session->user_id,
                    'title' => $this->input->post('header', TRUE),
                    'paragraph' => $this->input->post('paragraph', TRUE),
                    'date' => date('Y-m-d H:i:s')
                )), 'accords' => $this->db->where('user_id', $this->session->user_id)->get('accordions')->result()
            )
        );
    }

    public function addTestimonials()
    {
        echo json_encode(
            array(
                'status' => $this->db->insert('testimonials', array(
                    'name' => $this->input->post('name', TRUE),
                    'title' => $this->input->post('title', TRUE),
                    'comment' => $this->input->post('comment', TRUE),
                    'date' => date('Y-m-d H:i:s')
                )), 'tests' => $this->db->get('testimonials')->result()
            )
        );
    }

    public function addGridImage()
    {

        $this->load->library('upload', array(
            'upload_path' => './assets/uploads/grid_images',
            'allowed_types' => 'jpg|png|gif|jpeg',
        ));

        $this->upload->do_upload('image');

        echo json_encode(
            array(
                'status' => $this->db->insert('home_grid_image', array(
                    'user_id' => $this->session->user_id,
                    'title' => $this->input->post('title', TRUE),
                    'paragraph' => $this->input->post('paragraph'),
                    'image' => assets_url("uploads/grid_images/{$this->upload->data('file_name')}"),
                    'date' => date('Y-m-d H:i:s')
                )), 'grids' => $this->db->where('user_id', $this->session->user_id)->get('home_grid_image')->result()
            )
        );
    }


    public function removeTestimonials($serial)
    {
        echo json_encode(array('status' => $this->db->where('serial', $serial)->delete('testimonials')));
    }

    public function removeAccordion($serial)
    {
        echo json_encode(array('status' => $this->db->where('serial', $serial)->delete('accordions')));
    }

    public function removeGridImaeg($serial)
    {
        echo json_encode(array('status' => $this->db->where('serial', $serial)->delete('home_grid_image')));
    }
}
