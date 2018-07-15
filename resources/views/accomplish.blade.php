<!DOCTYPE html>
<html>
<head>
	<title>ToDo Web App</title>
	<script type="text/javascript" src="beautifyQuery.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">
	<script type="text/javascript" src="script.js"></script>
	<style type="text/css">
		input{
			border:1px solid inherit;
			border-radius: 3px;
		}
	</style>
</head>
<body>
<div>
	<div>
		<h3>ToDO</h3>
		<table class="table table-striped table-hover table-responsive ">
			<thead>
				<tr><th colspan="24">ToDo</th></tr>
			</thead>
			<tbody>		
			 	<tr>
			 		<th colspan="3">Goal</th><th colspan="7">Checklist</th><th colspan="3">Score</th><th colspan="7">Remarks</th>
			 	</tr>	
			 	@foreach($goal as $goals)
				<form method="post" action="/AccomplishGoal/{{$goals->id}}">
				<input type="hidden" name="_token" value="{{ Session::token()}}">
					<tr><td colspan="3">{{$goals->goal}}</td><td colspan="7">{{$goals->checklist }}</td>
					<td colspan="3"><input name="score" type="range" min="0" max="10"></td><td colspan="7"><input type="text" name="remarks"></td><td colspan="2"><button>Accomplish</button></td><td colspan="2"><input type="reset" value="Discard"></td></tr>
				</form>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="bootstrap-3.3.7/dist/js/boostrap.min.js"></script>
</body>
</html>