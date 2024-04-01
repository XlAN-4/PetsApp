

<table>

<thead>
    <tr>
        <th>Fullname</th>
        <th>Email</th>
        <th>Age</th>
        <th>Created</th>
      
    </tr>
</thead>
 <tbody>

@foreach($users as $user)
    <tr>
        <td>{{  $user->fullname   }}</td>
        <td>{{  $user->email      }}</td>
        <td>{{  Carbon\Carbon::parse($user->birthdate)->diffforhumans()}}</td>
        <td>{{  Carbon\Carbon::parse($user->created_at)->diffforhumans()}}</td>
     </tr>
@endforeach

 </tbody>
</table>
