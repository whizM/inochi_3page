<?php 
get_header();

/*
    Template Name: Contact_en
*/
?>

<main class="p-main">
        <div class="container">
            <p class="bread_crumb">
                <a href="<?php echo site_url();?>">TOP</a>&nbsp;>&nbsp
                <a href="<?php echo site_url();?>/contact">CONTACT_EN</a>
            </p>
            <div class="p-contact">
                <h1 class="p-contact__ttl fade_bottom_ttl">
                    CONTACT
                    <div class="ttl-underline"></div>
                </h1>
                <p class="p-contact__description fade_bottom_content">
                This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.This is text.
                </p>
                <form class="fade_bottom_content">
                    <label>ご氏名<span style="color: #B30010;">※</span></label><br>
                    <label for="fname">姓</label><br>
                    <input type="text" id="fname" name="fname" ><br>
                    <label for="lname">名</label><br>
                    <input type="text" id="lname" name="lname">

                    <label class="form_content">ご氏名(カタカナ)<span style="color: #B30010;">※</span></label><br>
                    <label for="fnamekata">姓</label><br>
                    <input type="text" id="fnamekata" name="fnamekata">
                    <label for="lnamekata">名</label><br>
                    <input type="text" id="lnamekata" name="lnamekata" ><br>

                    <label for="workname" class="form_content">ご勤務先名</label><br>
                    <input type="text" id="workname" name="workname">
                    <label for="affiliation_name" class="form_content">ご所属名</label><br>
                    <input type="text" id="affiliation_name" name="affiliation_name">
                    <label for="phone_number" class="form_content">電話番号<span style="color: #B30010;">※</span></label><br>
                    <input type="text" id="phone_number" name="phone_number" ><br>
                    <label for="email" class="form_content">メールアドレス<span style="color: #B30010;">※</span></label><br>
                    <input type="text" id="email" name="email">
                    <label for="email_confirm" class="form_content">メールアドレス(確認)<span style="color: #B30010;">※</span></label><br>
                    <input type="text" id="email_confirm" name="email_confirm">
                    <label for="ask_content" class="form_content">お問い合わせ内容<span style="color: #B30010;">※</span></label><br>
                    <textarea id="ask_content" name="ask_content">
                    </textarea>
                    <input type="button" value="内容のご確認へ" id="formbtn">
                </form>
            </div>
        </div>

    </main>






<?php
    get_footer();
?>