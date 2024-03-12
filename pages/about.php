<div class="grid-x about_container">
    <div class="large-6 cell intro_box">
        <h2>About Me</h2>
        <p class="intro">
            Hi, I like programming. Please hire me. I enjoy this and I am sure you can tell that by my sexy nooby website.
            If you know whats good for you and your company's health and wealth, you will hire me. UNDERSTAND?
        </p>
    </div>
    <div class="large-6 cell pfp_box">
        <img src="images/placeholder.png" class="pfp" alt="">
    </div>
</div>

<div class="grid-x">
    <div class="large-12 cell exp_box">
        <h2>Experience</h2>
        <p class="exp">
            HTML CSS javascript php python foundation java C# git github MySQL Delphi 
        </p>
    </div>
</div>

<div class="grid-x">
    <div class="large-12 cell">
        <?php
        include_once 'includes/work_page_funcs.php';
        ?>
    </div>
</div>

<div class="grid-x contact_box">
    <div class="large-12 cell text-center">
        <h2 class="contact_head">Contact</h2>
    </div>
    <div class="large-12 cells form_box">
        <form class=contact_form action="action_page.php">
            <label class="lbl_white" for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="First Name">
            
            <label class="lbl_white text-left" for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Last Name">
            
            <label class="lbl_white" for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@email.com">
            
            <label class="lbl_white" for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Message..." style="height:200px"></textarea>
            
            <div class="grid-x">
                <div class="large-12 cell text-center">
                    <input class="contact_button" type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>