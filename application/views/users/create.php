<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>Create New User</h1>
        <!--
            Form Helper:
            The Form Helper file contains functions that assist in working with forms.
            
            Returns all the errors associated with a form submission.
            This is a helper function for the form validation class. 
        -->
        <?php echo validation_errors(); ?>

        <!-- Creates the opening portion of the form. -->
        <?php echo form_open('users/create'); ?>

        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" class="form-control" name="first_name"
                id="first_name" placeholder="Enter first name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name"
                id="last_name" placeholder="Enter last name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email"
                id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="phone_number">Phone number</label>
            <input type="text" class="form-control" name="phone_number"
                id="phone_number" placeholder="Enter your phone number">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        
        <!-- Close the opening portion of the form. -->
        <?php echo form_close();?>
    </div>
</main>
