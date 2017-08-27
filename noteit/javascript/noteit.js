$(document).ready(function(){

//to get data from the webserver 
$.get('php/getnote.php',function(note)
{
  $('#noteplace').append(note);
}

);


//selecting the noteit head title
let theheadmenu = 0;
$("#head").click(function(){
if(theheadmenu == 0)
{
 $(this).after("<div id='thegreatmenu'></div>");
 theheadmenu = 1;
}
else
{
 $("#thegreatmenu").remove();
 theheadmenu = 0;
}

});


//selecting the noteit button 
$('#noteitbutton').click(function(){
  // selecting the notebox 
  var thenote=$('#notebox').val();
  //alert(thenote);
  // sending the data to server
  $('#notebox').val('');
   $.post('php/createnote.php',{notebox:thenote});
   location.reload();

});



// selecting a delete button that is dynamicly created

$('#noteplace').on("click", "#deletebutton" ,function(){
	var thename =$(this).attr('name');
        //alert("this is :"+thename);
	// posting the name value
       //	$.post('php/deletenote.php',[thenameid:""+thename] );
	$.post("php/deletenote.php" ,{thenameid:thename});
        location.reload();
});

//selecting the note area to edit it 
let noteclick = 0;
$('#noteplace').on('click',"#thenote",function()
  {
    //alert('this note clicked');
    //creating the new note area below the note it
    if (noteclick == 0)
    {
     //geting the name of the note 
     let notename= $(this).attr('name');
     let notecontent = $(this).html();
     $(this).after(`<textarea id='editarea' >${notecontent}</textarea> <input id='editbutton' type ='submit' value='edit' name=${notename} />`);
    
     $('#editbutton').after(`<input id='deletebutton' name=${notename} type='submit' value='delete'/>`);
  
          noteclick = 1;
    }
    else
    {
      $("#editarea").remove();
      $("#editbutton").remove();
      $("#deletebutton").remove();

      //add delete button
      noteclick = 0;
    }
  }

);

// selecting the edit note button to send the edit
$('#noteplace').on('click','#editbutton',function(){
 // alert("you clcik edit b");
 // sending data to server
 let idofnote = $(this).attr('name');
 let note = $("#editarea").val();
 $.post('php/editnote.php',{noteid:idofnote,thenote:note},function(note){
  //alert(note);
	 location.reload();
 
 });
});


});


