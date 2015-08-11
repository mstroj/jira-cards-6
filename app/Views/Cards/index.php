<div class="search">
	<form method="POST">
		<h1>Jira Kanban Cards</h1>
		<p>Put your JQL query below and press the button to get the pretty print-version of your tickets:</p>

		<div class="jirainfo">

			<label for="name" class="label-input">Username: </label>
			<input type="text" name="username" />
			<br />

			<label for="password" class="label-input">Password: </label>
			<input type="password" name="password" />
			<br />

			<label for="jql" class="label-input">JQL: </label>
			<input type="text" name="jql" />
			<br />
			<br />

			<label for="epic">Epic: </label>
			<select name="epic">
				<option value="1" selected="selected">Include information</option>
				<option value="0">Exclude information</option>
			</select>
			<br />
			<br />	

			<label for="a">Layout: </label>
			<select name="a">
				<option value="tickets" selected="selected">Cards</option>
				<option value="ticketlist">List</option>
			</select>
			<br />
			<br />
			<input type="submit" value="Get tickets!" />
		</div>
	</form>
</div>
