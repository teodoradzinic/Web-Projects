var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
 
})


/*$(document).ready(function(){

  $(document).on('click', '.edit_data', function(){
    var company_id = $(this).attr("company_id");
    $ajax({
      url: "edit.php",
      method: "POST",
      data: {company_id:company_id},
      dataType: "json",
      success: function(data){
        $('#companyName').val(data.company_name);
        $('#companyAddress').val(data.company_address);
        $('#contactPerson').val(data.contact_person);
        $('#telephone').val(data.company_tel);
        $('#company_id').val(data.company_id);
        $('#editModal').modal('show');
      }
    })
  });
});*/
