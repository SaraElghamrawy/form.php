<html>
	<body>
		<h1>البيانات الشخصيه</h1>
		<form method="post" action="task8.php?action=save">
		<span>الاسم بالكامل</span>
		<br/>
		<input type="text" name="username"/>
		<br/>
		<span> اكتب اسمك بالكامل كماهو مذكور بشهاده الميلاد</span>
		<br/>
		<span>المرحله الدراسيه</span>
		<br/>
		<select name="seltype">
		<option value="1">اولى ثانوى</option>
		<option value="2">ثانى ثانوى</option>
		<option value="3">ثالثه ثانوى</option>
		</select>
		<br/>
		<span>مقر الحجز</span>
		<br/>
		<input type="radio" name="address" value="street1"/>
		<span> الحلو</span>
		<input type="radio" name="address" value="street2"/>
		<span> اون لاين</span>
		<input type="radio" name="address" value="street3"/>
		<span> على مبارك </span>
		<br/>
		<input type="radio" name="sex" value="man"/>
		<span> ذكر</span>
		<input type="radio" name="sex" value="woman"/>
		<span> انثى</span>
		<br/>
		<span> البريد الالكترونى</span>
		<input type="email" name="email"/>
		<br/>
		<h2>بيانات الحمايه</h2>
		<span>كلمه المرور</span>
		<input type="passward" name="passward"/>
		<span>تاكيد كلمه المرور</span>
		<input type="passward" name="passward"/>
		<br/>
		<button type="submit">التسجيل</button>
		</form>
	</body>
</html>