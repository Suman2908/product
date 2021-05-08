
$(document).ready(function()
{
	$("#btn-search").click(function()
	{ 
		
		searchWithPagination(1, true);
	});
});



function searchWithPagination(page_number, search)
{
	$(this).html("SEARCHING...").attr("disabled", "disabled");
	
	$.ajax({
		url: 'search.php', 
		type: 'POST', 
		data: {keyword: $("#keyword").val(), page: page_number, search: search}, 
		dataType: "json",
		beforeSend: function(e) 
		{
			if(e && e.overrideMimeType)
			 {
				e.overrideMimeType("application/json;charset=UTF-8");
			}
		},
		success: function(response)
		{ 
			
			$("#btn-search").html("SEARCH").removeAttr("disabled");
			$("#view").html(response.hasil);
		},
		error: function (xhr, ajaxOptions, thrownError) 
		
		{ 
			alert(xhr.responseText); 
		}
	});
}



//insert
function add()
          {
              var name = $('#name').val();
              var description = $('#description').val();
              var price = $('#price').val();
              var quantity = $('#quantity').val();
          
              if(name == "" || description == "" || price == ""|| quantity == "")
                 {
                    alert('All fields are required..');
                 }
              else
                  {
              $.ajax({
                  url:'add_product.php',
                  type:'post',
                  data:{name:name,
                       description:description,
                       price:price,
                       quantity:quantity},
                       
                  success:function(data)
                  {
                     
                      alert('Data inserted..');
                      location.reload();
                      $("#myModal input").val("");
                      $("#myModal").modal("hide");
                  }
              });
                  }
          }
          

//Fetch Data
function GetUserDetails(updateid)
          {
              $('#hidden_id').val(updateid);
              
              $.post(
                    "update_product.php",
                    {updateid:updateid},
                    function(data)
                  {
                      var user = JSON.parse(data);
                      $('#update_name').val(user.name);
                      $('#update_description').val(user.description);
                      $('#update_price').val(user.price);
                      $('#update_quantity').val(user.quantity);
                  }
              );
              
              $('#UpdateModal').modal("show");
          }
        
//Update
function UpdateUser()
          {
              var update_name = $('#update_name').val();
              var update_description = $('#update_description').val();
              var update_price = $('#update_price').val();
              var update_quantity = $('#update_quantity').val();
              
            
              
              var update_hidden_id = $('#hidden_id').val();
              
              if(update_name == "" || update_description == "" || update_price == "" || update_quantity == "" )
                 {
                    alert('All fields are required..');
                 }
              else
                  {
              $.post(
                    "update_product.php",
                    {
                        update_hidden_id:update_hidden_id,
                        update_name:update_name,
                        update_description:update_description,
                        update_price:update_price,
                        update_quantity:update_quantity,
                       
                    },
                  function(data,status)
                  {
                      $('#UpdateModal').modal('hide');
                      alert('Data Updated Sucessfully');
                      location.reload();
                      
                  }
              );
                  }
          }


//Delete      
function DeleteUser(id)
          {
              var conf = confirm("Are You Sure ??");
              if(conf==true)
                 {
                 $.ajax({
                     url:'delete_product.php',
                     type:'post',
                     data:{id:id},
                     success:function(data)
                     {
                        //  alert(id);
                        //  alert(data); 
                         alert('Data Deleted Sucessfully');
                         location.reload();
                   
                     }
                 });
                 }
          }