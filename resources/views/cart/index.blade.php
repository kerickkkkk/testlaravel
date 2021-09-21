@extends('layout.app')

@section('content')
  <h1 class="text-primary">Cart</h1>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <Td>1</Td>
        <Td>$30</Td>
        <Td>
          <input type="number" >
        </Td>
        <Td>
          <button class="btn-primary btn">Delete</button>
        </Td>
      </tr>
    </tbody>
  </table>
  <hr>
  <button class="btn btn-primary">Update</button>
    


@endsection

@section('inline_js')
    @parent
    
@endsection