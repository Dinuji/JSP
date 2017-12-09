<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add stock</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <form action="../sources/save_add_stock.php" method="post">
      <table border="0">
        <tr>
          <th><label class="">Card Type</label></th>
          <th><label class="">Starting serial no</label></th>
          <th><label class="">Ending serial No</label><th>
          <th><label class="">Amount</label><th>
        </tr>
        <tr>
          <td><label class="">20 card</label></td>
          <td><input type="number" min="1" class="" name="Start20"></td>
          <td><input type="number" min="1" class="" name="End20"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="">50 card</label></td>
          <td><input type="number" class="" name="Start50"></td>
          <td><input type="number" class="" name="End50"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="" >100 card</label></td>
          <td><input type="number" class="" name="Start100"></td>
          <td><input type="number" class="" name="End100"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="" >200 card </label></td>
          <td><input type="number" class="" name="Start200"></td>
          <td><input type="number" class="" name="End200"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="" >500 card</label></td>
          <td><input type="number" class="" name="Start500"></td>
          <td><input type="number" class="" name="End500"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="">1000 card</label></td>
          <td><input type="number" class="" name="Start1000"></td>
          <td><input type="number" class="" name="End1000"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Save"></td>
          <td><input type="reset" name="reset" value="Cancel"></td>
        
      </table>
    </form>
  </body>
</html>