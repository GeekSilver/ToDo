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
		<h3 style="text-align: center;">ToDO</h3>
		<table class="table table-striped table-hover table-responsive ">
			<thead>
				<tr><th colspan="24">ToDo</th></tr>
			</thead>
			<tbody>
				<tr><th colspan="3">Goal</th><th colspan="7">Checklist</th><th colspan="2">Status</th><th colspan="2">Start</th><th colspan="2">Finish</th><th colspan="2">Score</th><th colspan="7">Remarks</th><th>Accomplish</th><th>delete</th></tr>				
	
				@foreach($goals as $goal)
				<tr><th colspan="3">{{ $goal->goal }}</th><th colspan="7">{{$goal->checklist}}</th><th colspan="2">{{$goal->status}}</th><th colspan="2">{{$goal->start}}</th><th colspan="2">{{$goal->finish}}</th><th colspan="2">{{$goal->score}}</th><th colspan="7">{{$goal->remarks}}</th><th><a href="/AccomplishAssesment/{{$goal->id}}"><i class="fa fa-check"></i></th><th colspan="2"><a href="/DeleteGoals/{{$goal->id}}"><i class="fa fa-times" style="color:red;"></i></a></th></tr>
				@endforeach
				
				<form method="post" action="{{ route('addGoal') }}">
				<input type="hidden" name="_token" value="{{ Session::token()}}">
				<tr><td colspan="3"><input type="text" name="goal"></td><td colspan="7"><input type="text" name="checklist"></td><td colspan="2"><button>Add Goal</button></td><td colspan="2"><button type="button" onclick="reset()">Discard</button></td></tr>
				</form>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="bootstrap-3.3.7/dist/js/boostrap.min.js"></script>
</body>
</html>