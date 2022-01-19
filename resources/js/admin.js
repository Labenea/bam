const ckeditor = require("@ckeditor/ckeditor5-build-classic");

const formfile = document.getElementById("formFile");
const form = document.getElementById("addForm");
const alertPlaceHolder = document.getElementById("liveAlertPlaceholder");
const textEditor = document.querySelector("#editor");
if (textEditor != null) {
  ckeditor.create(textEditor, {
      removePlugins: [,'MediaEmbed',
   ],
   toolbar: [          'heading',
   '|',
   'bold',
   'italic',
   '|',
   'bulletedList',
   'numberedList',
   '|',
   'insertTable',
   '|',
   'undo',
   'redo']
  });
}
console.log(ckeditor.builtinPlugins.map( plugin => plugin.pluginName ));


if(formfile){
    form.addEventListener("submit",ev => {
        ev.preventDefault();
        var file = formfile.files[0];
   
        if(file.size > 2097152){
            alert("Images to large, maximum image size is 2MB!!","warning");
        }else{
            form.submit();
        }
    })}


    function alert(message, type) {
        var wrapper = document.createElement('div')
        wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
        alertPlaceHolder.append(wrapper)
      }
      