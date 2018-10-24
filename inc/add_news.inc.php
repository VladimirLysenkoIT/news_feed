<form id="form" method="post">
  <label>Headline news:</label><br>
  <input type="text" name="title" id="title"><br>
  <label>Choose category:</label><br>
  <select name="category" id="category">
    <option value="1">Policy</option>
    <option value="2">Science</option>
    <option value="3">Sport</option>
    <option value="4">Business</option>
  </select>
  <label>Text:</label><br/>
  <textarea name="description" cols="50" rows="5" id="description"></textarea><br>
  <label>Source:</label><br/>
  <input type="text" name="source" id="source"><br>
  <br>
  <input type="button" id="button" onclick="checkForm()" value="Add!">
</form>
<div id="result"></div>