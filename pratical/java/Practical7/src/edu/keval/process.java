package edu.keval;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import com.mysql.jdbc.Driver;

/**
 * Servlet implementation class process
 */
@WebServlet("/process")
public class process extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public process() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		processor(request,response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		processor(request,response);
	}
	
	void processor(HttpServletRequest request, HttpServletResponse response)throws ServletException, IOException{
	try {
		PrintWriter out = response.getWriter();
		String un = request.getParameter("userName");
		out.println(un);
		String pw = request.getParameter("passWord");
		out.println(pw);
		DriverManager.registerDriver(new com.mysql.jdbc.Driver());
		Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/ajp","ajp","ajp");
		Statement stm = con.createStatement();
		String q_select = "select count(*) as lop from credit where username = '"+un+"' && password = '"+pw+"'";
		ResultSet rs = stm.executeQuery(q_select);		
		HttpSession session = request.getSession();
		rs.next();
		if (rs.getInt("lop")>0) {
			session.setAttribute("un", un);
			response.sendRedirect("/Practical7/home.jsp");
		}
		else{
			session.setAttribute("flag", "Wrong Credentials");
			response.sendRedirect("/Practical7/index.jsp");
		}
		
		
		
		
		/*while (rs.next()) {
			if (rs.getString("username").equals(un)) {
				
			}
			else
			{
				
			}
			
			
		}*/
	} catch (Exception e) {
		e.printStackTrace();
	}
	}
	

}
