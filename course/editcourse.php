<?php require_once('../connections/conn.php'); ?>
<?php
mysqli_query($conn,'set names utf8');
$query_course="select * from course";
$course=mysqli_query($conn,$query_course) or die(mysql_error($conn));
$row_course=mysqli_fetch_assoc($course);//取出一行数据的关联数组（索引数组）
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>编辑课程</title>
</head>
<body bgcolor="#f4f4f4">
	<table width="100%" border="0" align="center">
            <tr>
                <td hight="68" colspan="6" align="center">
                    <font face="隶书" size="+4" color="darkcyan">课程管理</font>
                </td> 
            </tr>
            
            <tr>
		<td height="169"  align="center">
                    <table width="100%" border="0">
			<tr valign="middle">
                            <td align="center"><b>课程名称</b></td>
			</tr>
			<?php do { ?>
                        <tr valign="middle" align="center">
				<td><?php echo $row_course['coursename'] ; ?></td>
				<input type="hidden" name="Id" id="Id" value="<?php echo $row_course['id'] ?>">
				<td>
				<a href="edit.php?Id=<?php echo $row_course['id'] ?>" title="edit.php?Id=<?php echo $row_course['id'] ?>">编辑</a>
                                <a href="delete.php?Id=<?php echo $row_course['id'] ?>" title="delete.php?Id=<?php echo $row_course['id'] ?>">删除</a>
				</td>
                            </tr>
				<?php }while ($row_course=mysqli_fetch_assoc($course)) ;
				?>
			</table>
		</td>
	</tr>
	<tr>
            <td colspan="6">
		<table width="100%" border="0">
                <hr>
		<tr>
                    <td align="center" valign="middle">Copyright@2020 组卷系统—教师管理</td>
		</tr>
		</table>	
            </td>
	</tr>
    </table>
</body>
</html>
