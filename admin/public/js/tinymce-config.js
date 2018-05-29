// tinymce.init({
//   selector: 'textarea',
//   height: 150,
//   theme: 'modern',
//   plugins: [
//     'advlist autolink lists link image charmap print preview hr anchor pagebreak',
//     'searchreplace wordcount visualblocks visualchars code fullscreen',
//     'insertdatetime media nonbreaking save table contextmenu directionality',
//     'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
//   ],
//   toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
//   toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
//   image_advtab: true,
//   templates: [
//     { title: 'Test template 1', content: 'Test 1' },
//     { title: 'Test template 2', content: 'Test 2' }
//   ],
//   content_css: [
//     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
//     '//www.tinymce.com/css/codepen.min.css'
//   ]
//  });
// http://localhost:8080/project/uploads/images/product.jpg
tinymce.init({
    selector: "textarea",
    theme: "modern",
    width: '',
    height: 150,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   relative_urls: false,
   remove_script_host:false,
   external_filemanager_path:"http://localhost:8080/project/media/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "http://localhost:8080/project/media/plugin.min.js"}
 });