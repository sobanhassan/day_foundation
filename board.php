<?php $title = "Board of Directors";
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
            <h2>Board Members</h2>
            <p>William Stengel, President<br />
            Stacie Fidlar, Vice President<br />
            Dan Fetes, Treasurer<br />
            John Phillips, Secretary<br />
            Jesse Hullon</p>
        </div>
    </main>

<?php include('includes/footer.php'); ?>