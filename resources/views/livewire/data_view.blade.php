<table border="1">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Image Name</th>
    </tr>
    </thead>
  <tbody>
     @foreach($all_data as $v_contact) 	
    <tr>
      <th scope="row">{{$v_contact->title}}</th>
      <td><img src="{{asset('images/'. $v_contact->file_name)}}" alt="image" width="100px" height="100px"></td>
  </tr>

  @endforeach  
  </tbody>
</table>