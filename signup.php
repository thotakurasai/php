<html>
	<head>
		<title> My first Script</title>
	</head>
	<body>
		<table cellspcaing="15px" border="0px">
		<form action="signup_destination.php" method="post">
			<tr>
			<td>First Name</td>
			<td><input type="text" name="first_name"/></td>
			</tr>
			<tr>
			<td>Last Name</td>
			<td><input type="text" name="last_name"/></td>
			</tr>
			<tr>
			<td>Age</td>
			<td><input type="text" name="age"/></td>
			</tr>
			<tr>
			<td>Gender</td>
			<td>Male<input type="radio" name="gender" value="male"/>
				Female<input type="radio" name="gender" value="female"/></td>
			</tr>
			<tr>
			<td>Email</td>
			<td><input type="text" name="email"/></td>
			</tr>
			<tr>
			<td>Date of Birth</td>
				<td><select name="year">
					<option>year</option>
					<option>1998</option>
					<option>1997</option>
					<option>1996</option>
					<option>1995</option>
					<option>1994</option>
					<option>1993</option>
					<option>1992</option>
					<option>1991</option>
					<option>1990</option>
					<option>1989</option>
					<option>1988</option>
					<option>1987</option>
					<option>1986</option>
					<option>1985</option>
					</select>
					<select name="month">
					<option>month</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					</select>
					<select name="day">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
					</select></td>
			</tr>
			<tr>
			<td>Password</td>
			<td><input type="password" name="pass"/></td>
			</tr>
			<tr>
			<td>Retype-Password</td>
			<td><input type="password" name="repass"/></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit"/>
			</td>
			</tr>
		</form>
		</table>
	</body>
</html>