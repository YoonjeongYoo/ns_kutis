<%@ page import="java.io.*" %>
<%@ page import="java.util.*" %>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <title>Form 데이터를 파일로 저장하기</title>
</head>
<body>

<%
    if ("POST".equalsIgnoreCase(request.getMethod())) {
        String userid = request.getParameter("username");
        String userpw = request.getParameter("password");
        // id와 pw을 받아옴

        String fileName = "userData.txt"; // 저장할 파일 이름

        // 파일에 쓸 내용 생성
        String fileContent = "Userid: " + userid + "\nUserpassword: " + userpw + "\n"; // 여기서 파일에 쓸 내용을 생성합니다.

        try {
            // 파일 쓰기
            File file = new File(request.getServletContext().getRealPath("/home/") + fileName); // 파일 경로 지정
            FileWriter fileWriter = new FileWriter(file, true);
            BufferedWriter bufferedWriter = new BufferedWriter(fileWriter);
            bufferedWriter.write(fileContent);
            bufferedWriter.newLine();
            bufferedWriter.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
%>

<!-- 여기에는 사용자에게 보여줄 HTML 폼이 위치합니다 -->
<!-- <form action="" method="post">
    <label for="username">사용자명:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="email">이메일:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="제출">
</form> -->

</body>
</html>
