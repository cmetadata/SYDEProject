@extends ('layout.header')

@section ('content')

    <form method="POST" action="/organizations">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Bill</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="organizationName">Patient Number:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>

            <div class="form-group">
                <label for="organizationName">Patient Name:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>

            <div class="form-group">


                <div class="checkbox">

                    <label><input type="checkbox" value="">Semiprivate Room</label>
                    <label><input type="checkbox" value="">Private Room</label>
                    <label><input type="checkbox" value="" disabled>Television</label>
                    <br/>
                    <br/>
                    
                    <label><input type="checkbox" value="">Labratory</label>                    
                    <label><input type="checkbox" value="" disabled>Glucose</label>
                    <br/>
                    <br/>

                    <label><input type="checkbox" value="">Radiology</label>                                        
                    <label><input type="checkbox" value="" disabled>Chest XRay</label>

                </div>             

            </div>             


            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
