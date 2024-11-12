<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
<table id="sky" class="table table-striped" style="width:100%">
         <thead>
            <tr>
               
                <th scope="col">Dress Name</th>
                <th scope="col">Rate</th>
                <th scope="col">Color</th>
                <th scope="col">Size</th>
            </tr>
        </thead>
        <tbody>
        @foreach($userdetails as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->rate}}</td>
        <td>{{$user->colors}}</td>
        <td>{{$user->size}}</td>
       
 
    </tr>
    @endforeach
</tbody>
<tfoot>
            <tr>
                <th>Dress Name</th>
                <th>Rate</th>
                <th>Color</th>
                <th>Size</th>
            </tr>
        </tfoot>
</table> 
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
<SCRIpt>
   new DataTable('#sky'); 
</SCRIpt>

</x-app-layout>