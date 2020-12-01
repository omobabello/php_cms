var app=new Vue({el:"#app",data:{s1_message:"",s2_message:"",s3_message:"",s4_message:"",sp_message:"",b_message:"",s1_class:"",s2_class:"",s3_class:"",s4_class:"",sp_class:"",b_class:"",s1_title:"",s2_title:"",s3_title:"",s4_title:"",s1_article:"",s2_article:"",s3_article:"",s4_article:"",progress:0,s3_image:!0,s4_image:!0,s3_video_url:"",s3_image_file:"",s4_image_file:"",sp_image_file:"",banner:"",hasBanner:!1,logos:[]},methods:{changeFile(s,t){"b"==t&&(this.banner=s.target.files[0]),"c"==t&&(this.s3_image_file=s.target.files[0]),"d"==t&&(this.s4_image_file=s.target.files[0]),"e"==t&&(this.sp_image_file=s.target.files[0])},uploadBanner(){if(!this.banner||this.banner/1024/1024>10)this.b_class="alert alert-danger",this.b_message="Select an image file not more than 10MB";else{this.b_message="";const s={onUploadProgress:function(s){app.progress=Math.round(s.loaded/s.total*100)}};let t=this.toFormData({image:this.banner});axios.post("http://localhost/gym_cms/index.php/UploadBanner/about",t,s).then(s=>{s.data.status?(this.progress=0,this.banner=s.data.file,this.hasBanner=!0):(this.b_message=s.data.message,this.b_class="alert alert-danger")}).catch(s=>{console.log(s.response)})}},addSectionOne(){let s=!0,t="";if(this.s1_title||(t+="Enter title <br/>",s&=!1),this.s1_article||(t+="Enter Article",s&=!1),s){this.s1_message="";let s=this.toFormData({title:this.s1_title,article:this.s1_article});axios.post("http://localhost/gym_cms/index.php/AddAboutSectionOne",s).then(s=>{s.data.status?(this.s1_message="Content Updated :)",this.s1_class="alert alert-success"):(this.s1_message="Operation Failed :(",this.s1_class="alert alert-danger")})}else this.s1_message=t,this.s1_class="alert alert-danger"},addSectionTwo(){let s=!0,t="";if(this.s2_title||(t+="Enter title <br/>",s&=!1),this.s2_article||(t+="Enter Article",s&=!1),s){this.s2_message="";let s=this.toFormData({title:this.s2_title,article:this.s2_article});axios.post("http://localhost/gym_cms/index.php/AddAboutSectionTwo",s).then(s=>{s.data.status?(this.s2_message="Content Updated :)",this.s2_class="alert alert-success"):this.s2_message="Operation Failed :("})}else this.s2_message=t,this.s2_class="alert alert-danger"},addSectionThree(){let s=!0,t="";if(this.s3_video_url&&!/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:\/?#[\]@!\$&'\(\)\*\+,;=.]+$/.test(this.s3_video_url)&&(t+="Enter valid URL <br/>",s&=!1),this.s3_image_file&&this.s3_image_file.size/1024/1024>2&&(t+="Seelect an image file less than 2MB <br/>",s&=!1),this.s3_title||(t+="Enter title <br/>",s&=!1),this.s3_article||(t+="Enter Article",s&=!1),s){this.s3_message="";let s=this.toFormData({title:this.s3_title,article:this.s3_article,video_url:this.s3_video_url,file:this.s3_image_file});axios.post("http://localhost/gym_cms/index.php/AddAboutSectionThree",s).then(s=>{s.data.status?(this.s3_message="Content Updated :)",this.s3_class="alert alert-success"):(this.s3_message="Operation Failed :(",this.s3_class="alert alert-danger")}).catch(s=>{console.log(s.response)})}else this.s3_message=t,this.s3_class="alert alert-danger"},addSectionFour(){let s=!0,t="";if(this.s4_image_file&&this.s4_image_file.size/1024/1024>2&&(t+="Seelect an image file less than 2MB <br/>",s&=!1),this.s4_title||(t+="Enter title <br/>",s&=!1),this.s4_article||(t+="Enter Article",s&=!1),s){this.s4_message="";let s=this.toFormData({title:this.s4_title,article:this.s4_article,file:this.s4_image_file});axios.post("http://localhost/gym_cms/index.php/AddAboutSectionFour",s).then(s=>{console.log(s.data),s.data.status?(this.s4_message="Content Updated :)",this.s4_class="alert alert-success"):(this.s4_message="Operation Failed :(",this.s4_class="alert alert-danger")}).catch(s=>{console.log(s.response)})}else this.s4_message=t,this.s4_class="alert alert-danger"},addSponsorLogo(){!this.sp_image_file||this.s4_image_file.size/1024/1024>2?(this.sp_message="Select an image file not more than 2MB",this.sp_class="alert alert-danger"):(this.sp_message="",axios.post("http://localhost/gym_cms/index.php/AddSponsorLogo",this.toFormData({file:this.sp_image_file})).then(s=>{s.data.status?(this.logos=s.data.logos,this.sp_message="Logo Uploaded",this.sp_class="alert alert-success"):(this.sp_message="Operation Failed :(",this.sp_class="alert alert-danger")}))},loadContent(){axios.post("http://localhost/gym_cms/index.php/LoadAboutContent").then(s=>{result=s.data,this.s1_title=result.s1.title,this.s1_article=result.s1.article,this.s2_title=result.s2.title,this.s2_article=result.s2.article,this.s3_title=result.s3.title,this.s3_article=result.s3.article,this.s3_video_url=result.s3.video_url,this.s4_title=result.s4.title,this.s4_article=result.s4.article,this.s3_image=!Boolean(result.s3.image_url),this.s4_image=!Boolean(result.s4.image_url),this.hasBanner=null!=result.banner,this.banner=result.banner,this.logos=result.logos}).catch(s=>{console.log(s.response)})},removeLogo(s){this.logos=this.logos.filter(t=>t.serial!=s),axios.post("http://localhost/gym_cms/index.php/RemoveLogo",this.toFormData({logo:s}))},toFormData(s){let t=new FormData;for(key in s)t.append(key,s[key]);return t}},filters:{filename(s){let t=s.split("/");return t[t.length-1]}},mounted(){this.loadContent()}});