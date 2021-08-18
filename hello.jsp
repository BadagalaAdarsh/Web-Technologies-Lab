<%-- <%@ page import="java.sql.*" %>

<%  String user=request.getParameter("uname");
    String pass=request.getParameter("password");

    Class.forName("com.mysql.jdbc.Driver");
    String url="jdbc:mysql://localhost:3306/jdbase";
    Connection con=DriverManager.getConnection(url,"root","");
    Statement st=con.createStatement();



    String sql="insert into student values(1,'aaa')";
    int n=st.executeUpdate(sql);

    st.close();
    con.close();
    %>

 --%>


<%-- <%  String user=request.getParameter("uname");
    String pass=request.getParameter("password");
    // out.println("<h1>Login Succes</h1>");
    // out.println("<h1>Welcome "+user+"</h1>");

    Class.forName("com.mysql.jdbc.Driver").newInstance();


%> --%>


<%-- ResultSet rs=st.executeQuery("select * from register where user_name='"+user+"'and password'"+pass+"'");
int count=0;
while(rs.next()){
  count++;
}
if (count>0) {
    out.println("<h1>Login Succes</h1>");
    out.println("<h1>Welcome"+user+"</h1>");
}
else{
  out.println("<h1>Invalid Login</h1>");
  out.println("<h1>Try Again</h1>");
} --%>











<%@ page import="java.sql.*"%>
<%
try{
  String user=request.getParameter('username');
  String pass=request.getParameter('password');
  Class.forName("com.mysql.jdbc.Driver").newInstance();
  Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/hello",'root',"");
  Statement st=con.createStatement();
  ResultSet rs=st.executeQuery("select * from student where username='"+user+"' and password='"+pass+"'");

  int count=0;
  while(rs.next()){
    count++;
  }
  if (count>0) {
    out.println("<h1>Login Success</h1>");
    out.println("<h1>Welcome "+user+"</h1>");
  }
  else{
    out.println("<h1>Invalid Login</h1>");
    out.println("<h1>Try Again</h1>");
  }
}
catch(Exception e){
  out.println(e);
}

%>
