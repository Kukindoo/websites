<form action="phpDo/contact.ini.php" method="post" id="contactForm">
    <div class="form-element">
        <input type="text" id="customerName" name="customerName" placeholder="Enter you name" />
    </div>
    <div class="form-element" >
        <input type="email" id="customerEmail" name="customerEmail" placeholder="Enter you E-mail" />
    </div>
    <div  class="form-element">
        <textarea name="customerMessage" id="message" rows="6" placeholder="Enter your message here..."></textarea>
    </div>
    
    <div  class="form-element">
        <label for="subscribe" class="subscribe-toggle-1">
            <input type="checkbox" id="subscribe" name="subscribe" class="subscribe-toggle-1__input" />
        <span class="subscribe-toggle-1__button"></span>
        </label>
    </div>
    <div  class="form-element">
        <input type="submit" id="submit" name="submit" class="btn-3d-1
            btn-3d-1-blue" />
    </div>
</form>