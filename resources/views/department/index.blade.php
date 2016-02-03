<!DOCTYPE html>
<meta charset="UTF-8">
<title>部署一覧</title>

<table>
  <tr>
    <th>部署名</th>
    <th>作成日</th>
  </tr>
  @foreach($departments as $department)
    <tr>
      <td>{{$department->name}}</td>
      <td>{{$department->created_at->format('Y-m-d')}}</td>
    </tr>
    @endforeach
</table>
