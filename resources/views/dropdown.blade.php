

<!DOCTYPE html>
<html>
<head>
<title>Assign Mechanic</title>
</head>
<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ session('failed') }}
</div>
@endif
<form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
    <tr>
    <td>Mechanic Name</td>
    <td><input type='text' name='mechanicname' /></td>
    <tr>
    <td>Status</td>
    <td>
    <select name="status">
     <option>--status--</option>
    <option value="approve">Approved</option>
    <option value="not approve">Not Approved</option>
    </select></td>
    </tr>
    <tr>
    <td colspan = '2'>
    <input type = 'submit' value = "Update"/>
    </td>
    </tr>
    </table>
</form>
</body>
</html>