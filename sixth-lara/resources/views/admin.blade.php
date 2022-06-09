<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<table  class="table table-dark table-borderless">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">movie_url</th>
        <th scope="col">movie_name</th>
        <th scope="col">movie_description</th>
        <th scope="col">movie_gener</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($showinT as $item)
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->movie_url }}</td>
        <td>{{ $item->movie_name }}</td>
        <td>{{ $item->movie_description }}</td>
        <td>{{ $item->movie_gener}}</td>
        <td><a href="{{ url('update/id/'.$item->id) }}" type="button" type="button" class="btn btn-primary">Edit</a></td>

        <td><a href="{{ url('delete/id/'.$item->id) }}" type="button" type="button" class="btn btn-danger">Dlete</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>