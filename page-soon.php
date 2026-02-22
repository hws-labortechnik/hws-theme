
<?php
/*
Template Name: PageSoon
*/

get_header();
?>

<style>
 h1 {
  color: black;   font-size: 1.275rem; font-family: Roboto; font-weight: 300; line-height: 20px; word-wrap: break-word;
} 
p {
    font-weight: 300;
}  
body > footer {
    display: none;
}
#navbar {
    display: none;
}
</style>


<div class="w-full mx-auto">
<main>

<img src="<?php echo get_template_directory_uri(); ?>/public/soon.png" alt="soon" class="mx-auto w-auto h-screen object-cover">

</main>
</div>

<?php
get_footer();
?>