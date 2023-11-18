<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student List</title>
    </head>
    <body>
        <div>
        @if(count($errors)>0)
		<div class="alert alert-danger alert-block col-md-5">
    		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<ul class="list-unstyled">
        		@foreach($errors as $error)
        		<li> {{$error}} </li>
        		@endforeach
    		</ul>
		</div>
	    @endif
        </div>
        <div><button><a href="#">Create Student</a></button></div><br>
        <div>
            <table style='border-collapse:collapse'>
                <thead>
                    <th width="250" style="border: 1px solid black;">Student Name</th>
                    <th width="350" style="border: 1px solid black;">Course Name</th>
                    <th width="350" style="border: 1px solid black;">Address</th>
                    <th width="350" style="border: 1px solid black;">Email</th>
                    <th width="350" style="border: 1px solid black;">DOB</th>
                    <th width="150" style="border: 1px solid black;">Action</th>
                </thead>
                <tbody>
                    <!-- foreach($courseLists as $course) -->
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black;"></td>
                        <td style="border: 1px solid black;"></td>
                        <td style="border: 1px solid black;"></td>
                        <td style="border: 1px solid black;"></td>
                        <td style="border: 1px solid black;"></td>
                        <td style="display:flex;"><span style="margin-right:15px;"><a href="#"><button>Edit</button></a></span>
                         <span><form method="POST" action="#">
                            @method('delete')
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" value="#">
                            <button type="button"><a >Delete</a></button>
                        </form></span></td>
                    </tr>
                    <!-- endforeach -->
                </tbody>
            </table>
        </div>
    </body>
</html>