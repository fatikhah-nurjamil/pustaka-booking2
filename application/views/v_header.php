<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Prog II | Merancang template sederhana dengan Codeigniter</title>
    <link rel="stylesheet" type='text/css' href="<?php echo base_url()
    ?>assets/css/stylebuku.css">
</head>
<body>
   <div id='wrapper'>
       <header>
           <hgroup>
               <h1>RentalBuku.net</h1>
               <h3>Membuat Template Sederhana dengan Codeiginiter</h3>
           </hgroup>
           <nav>
               <ul>
                   <li>
                       <a href="<?php echo base_url().'index.php/Web' ?>">Home</a>
                   </li>
                   <li>
                       <a href="<?php echo base_url().'index.php/Web/about' ?>">About</a>
                   </li>
               </ul>
           </nav>
           <div class='clear'></div>
       </header>
    </div>
</html>
