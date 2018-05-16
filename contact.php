<?php include('includes/head.php'); ?>
	
<div id="maincontent">

<h1>Contact Me!</h1>

<form method="post" action="contactscript.php" id="contact" name="contact">
	<fieldset>
  		<div>
    		<label for="name" class="label">Name:</label>
    		<input type="text" id="name" name="name" size="36" required/>
  		</div>
  		<div>
    		<label for="email" class="label">Email address:</label>
   		 	<input type="text" id="email" name="email" size="36" required/>
  		</div>
  		<div>
    		<label for="subject" class="label">Subject:</label>
    		<input type="text" id="subject" name="subject" size="36" />
  		</div>
  		<div>
    		<label for="message" class="label">Message:</label>
    		<textarea rows="5" cols="36" id="message" name="message"></textarea>
  		</div>
      <div>
        <p>Interested or have questions about a specific ornament? Select the category and specific ornament below (Optional)</p>
        <label for="text-one" class="label">Category</label>
        <select id="text-one" name="text-one">
      	  <option selected value="base">Please Select</option>
      	  <option value="baby">Baby</option>
      	  <option value="babysfirst">Baby's First Christmas</option>
          <option value="christmas">Christmas</option>
          <option value="hobbies">Hobbies</option>
          <option value="military">Military</option>
          <option value="pets">Pets</option>
          <option value="pets">Professions</option>
          <option value="seasonal">Seasonal</option>
          <option value="specialty">Specialty &amp; Sports</option>
          <option value="wedding">Wedding</option>
      	</select>
        <br /><br />
        <label for="text-twi" class="label">Ornament</label>
      	<select id="text-two" name="text-two">
      		<option>Please choose from above</option>
      	</select>
  </fieldset>
  <div id="submitdiv">
    <button type="submit" id="submit">Send Message</button>
  </div>
</form>

	
</div><!--close maincontent-->	
	
<?php include('includes/footer.php'); ?>