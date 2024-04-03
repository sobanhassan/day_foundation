<?php $title = "Financials";
include('includes/header.php');?>
<style>
    .replace-header-img {
        background-image: url("./images/about.jpg") !important;
        background-position: center;
    }
    
    .about h1{
        text-align: center;
        margin: 20px 0px;
    }
    
    .about div p img {
        float: right;
        width: 400px;
        border-radius: 20px;
    }
    
    @media only screen and (max-width: 550px) {
        .about div p img {
            float: none !important;
            width: 300px !important;
        }
        
        .about div p {
            text-align: center;
        }
    }

</style>
    <main>
        <div class="about justify adjust">
            <h2>990 Forms</h2>
            <p><a href="docs/2022-990.pdf" target="_blank">2022</a></p>
            <p><a href="docs/2021-990.pdf" target="_blank">2021</a></p>
        	<p><a href="docs/2020-990.pdf" target="_blank">2020</a></p>
        </div>
    </main>

<?php include('includes/footer.php'); ?>