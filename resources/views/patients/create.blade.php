@extends ('layout.header')

@section ('content')

    <form method="POST" action="/organizations">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Rooms</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="organizationName">Patient Number:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>

            <div class="form-group">
                <label for="organizationName">Room Number:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>

            <div class="form-group">
                <label for="organizationName">First Name:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>       

            <div class="form-group">
                <label for="organizationName">Last Name:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>       

            <div class="form-group">
                <label for="organizationName">Address:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>            

            <div class="form-group">
                <label for="organizationName">Postal Code:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>            

             <div class="form-group text-center">
                <label for="organizationName">Province:</label>
                <select class="form-control text-center">
                    <label for="organizationName">Province:</label>
                    <option value="one">Ontario</option>
                    <option value="two">Quebec</option>
                    <option value="three">British Columbia</option>
                    <option value="four">Alberta</option>
                    <option value="five">Australia</option>
                </select>
            </div>            


             <div class="form-group">
                <label for="organizationName">City:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>            
                       
            <div class="form-group">
                <label for="organizationName">Sex:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>            


            <div class="form-group">
                <label for="organizationName">Telephone:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>            

            <div class="form-group">
                <label for="organizationName">HCN:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>            


            <div class="form-group">
                <label for="organizationName">Financial Status:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>            


            <div class="form-group">
                <label for="organizationName">Date Admitted:</label>
                <input type="date" class="form-control" id="organizationName" name="organizationName" required>
            </div>            


            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
