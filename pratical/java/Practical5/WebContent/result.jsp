<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Result</title>
</head>
<body>
	<%
		String name =(String)session.getAttribute("name");
		String id =(String)session.getAttribute("id");
		String department =(String)session.getAttribute("department");
		
		int s1 = Integer.parseInt(request.getParameter("m1"));
		int s2 = Integer.parseInt(request.getParameter("m2"));
		int s3 = Integer.parseInt(request.getParameter("m3"));
		int s4 = Integer.parseInt(request.getParameter("m4"));
		int s5 = Integer.parseInt(request.getParameter("m5"));
		int total = s1+s2+s3+s4+s5;
		float average = total/5;
		char grade;
		if(average >= 90)
		{
			grade = 'A';
		}
		else if(average >= 70)
		{
			grade='B';
		}
		else if (average >= 60)
		{
			grade = 'C';
		}
		else
		{
			grade = 'F';
		}
	
	%>
	<center>
		<table border="2">
			<tr>
				<th>
					Name
				</th>
				<td>
					<%= name %>
				</td>
			</tr>
			<tr>
				<th>
					ID
				</th>
				<td>
					<%= id %>
				</td>
			</tr>
			<tr>
				<th>
					Department
				</th>
				<td>
					<%= department %>
				</td>
			</tr>
			<tr>
				<th>
					Subject 1
				</th>
				<th>
					Subject 2
				</th>
				<th>
					Subject 3
				</th>
				<th>
					Subject 4
				</th>
				<th>
					Subject 5
				</th>
				<th>
					Total
				</th>
				<th>
					Average 
				</th>
				<th>
					Grade
				</th>
			</tr>
			<tr>
				<td>
					<%= s1 %>
				</td>
				<td>
					<%= s2 %>
				</td>
				<td>
					<%= s3 %>
				</td>
				<td>
					<%= s4 %>
				</td>
				<td>
					<%= s5 %>
				</td>
				<td>
					<%= total %>
				</td>
				<td>
					<%= average %>
				</td>
				<td>
					<font <%= grade=='A'?"color='green'":"color='red'" %>><%=grade%></font>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>