function _id(id){
  return document.getElementById(id);
}
        // previewing user profile picture brfore upload//;
        let userpicpreview = document.getElementById('userpicpreview');

        function previewprofilepic(event) {
          let src = URL.createObjectURL(event.target.files[0]);
          userpicpreview.src = src;

        }
        // show password visibility icon 
       _id('InputPassword').addEventListener('keydown', () => {
        let val = _id('InputPassword').value;
        if (val.length > 0) {
          _id('showhidepassword').classList.remove('d-none');
          
        }
       });
         // toggle password visibility
         $('#showhidepassword')
         .click(() => {
           let input = _id('InputPassword');
           if (input.type == 'password') {
             input.type = 'text';
             _id('showhidepassword').classList.replace(
               'fa-eye',
               'fa-eye-slash'
             );
           } else {
             input.type = 'password';
             _id('showhidepassword').classList.replace(
               'fa-eye-slash',
               'fa-eye'
             );
           }
         });











































