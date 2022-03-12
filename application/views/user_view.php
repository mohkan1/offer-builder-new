<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>
 <body>
   <form method='post' action='http://localhost/codeIgniter-3/index.php/user'>

     <table>
       <tr>
         <td>Name</td>
         <td><input type='text' name='txt_name'></td>
       </tr>
       <tr>
         <td>Username</td>
         <td><input type='text' name='txt_uname'></td>
       </tr>
       <tr>
         <td>Email</td>
         <td><input type='text' name='txt_email'></td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td><input type='submit' name='submit' value='Submit'></td>
       </tr>
    </table>
    
    <button id="saveJson">Save json</button>
   </form>
   
   <script>
   let x = {
    "name": "{{ protocol.name }}",
    "elements": [
        {
            "angle": 0,
            "backgroundColour": "#ffffff",
            "centerHorizontally": false,
            "centerVertically": false,
            "children": [],
            "colour": "#000000",
            "fontFamily": "Arial",
            "grid": false,
            "height": 30,
            "id": 0,
            "margin": 0,
            "minHeight": 10,
            "minWidth": 10,
            "name": "Text",
            "padding": 0,
            "position": {
                "top": 273,
                "left": 30
            },
            "required": false,
            "showHelpText": false,
            "showToCustomer": false,
            "textAlign": "left",
            "value": [],
            "width": 600,
            "zIndex": 0,
            "extraProperties": [],
            "properties": {
                "_text": "Test for fun",
                "_textType": 0,
                "state": false,
                "mallTop": 273,
                "mallLeft": 30
            },
            "builder": false
        },
        {
            "angle": 0,
            "backgroundColour": "#ffffff",
            "centerHorizontally": false,
            "centerVertically": false,
            "children": [],
            "colour": "#000000",
            "fontFamily": "Arial",
            "grid": false,
            "height": 40,
            "id": 1,
            "margin": 0,
            "minHeight": 10,
            "minWidth": 10,
            "name": "Input",
            "padding": 0,
            "position": {
                "top": 333,
                "left": 30
            },
            "required": false,
            "showHelpText": false,
            "showToCustomer": false,
            "textAlign": "left",
            "value": [],
            "width": 630,
            "zIndex": 0,
            "extraProperties": [],
            "properties": {
                "_label": "",
                "_helpText": "",
                "_rows": 1,
                "_placeholder": "ExemepelText",
                "state": false,
                "mallTop": 333,
                "mallLeft": 30
            },
            "builder": false
        }
    ],
    "target": "#form-view",
    "width": 687.865,
    "height": 880.625,
    "minHeight": 880.625,
    "absoluteMinHeight": 880.625,
    "grid": {
        "unit": 5
    },
    "renderMode": 1,
    "mode": 0,
    "hasCover": true
}

    let temp;
    $( "#saveJson" ).click(function() {
        
      $.post("http://localhost/codeIgniter-3/index.php/user/saveJson",
      JSON.stringify({test: "testtest"}),
      function(data){
        alert(data);
      });
 
    });
   
   </script>
   
 </body>
</html>