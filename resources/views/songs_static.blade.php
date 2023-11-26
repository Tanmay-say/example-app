<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Playlist Management</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      display: grid;
      grid-template-rows: auto 1fr auto;
      min-height: 100vh;
    }

    header {
      background-color: #333;
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
    }

    main {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
      padding: 20px;
    }

    nav {
      background-color: #eee;
      padding: 10px;
      border-radius: 5px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    form {
      display: grid;
      gap: 20px;
    }

    form label {
      display: block;
      margin-bottom: 5px;
    }

    form input, form select {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
    }

    form button {
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px;
    }

    /* Responsive adjustments */
    @media only screen and (min-width: 600px) {
      main {
        grid-template-columns: 200px 1fr;
      }
    }

    @media only screen and (max-width: 600px) {
      header {
        flex-direction: column;
        text-align: center;
      }

      header div {
        margin-bottom: 10px;
      }

      main {
        padding: 10px;
      }

      nav {
        grid-column: span 2;
      }
    }
  </style>
</head>
<body>

<header>
  <div>
    <h1>Playlist Name</h1>
    <p>Basic information about the playlist</p>
  </div>
  <div>
    <a href="#">Edit Playlist</a>
    <a href="#">New Playlist</a>
  </div>
</header>

<main>
  <nav>
    <h2>Saved Playlists</h2>
    <ul>
      <li><a href="#">Playlist 1</a></li>
      <li><a href="#">Playlist 2</a></li>
      <!-- Add more playlists as needed -->
    </ul>
  </nav>

  <div>
    <table>
      <thead>
        <tr>
          <th>Serial No</th>
          <th>Song Title</th>
          <th>Artist Name</th>
          <th>Album Name</th>
          <th>Duration</th>
        </tr>
      </thead>
      <tbody>
        <!-- Song rows go here -->
        <tr>
          <td>1</td>
          <td>Song 1</td>
          <td>Artist 1</td>
          <td>Album 1</td>
          <td>3:45</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Song 2</td>
          <td>Artist 2</td>
          <td>Album 2</td>
          <td>4:20</td>
        </tr>
        <!-- Add more songs as needed -->
      </tbody>
    </table>

    <form>
      <label for="playlistName">Playlist Name:</label>
      <input type="text" id="playlistName" name="playlistName" required>

      <label for="songList">Select Song:</label>
      <select id="songList" name="songList">
        <option value="">None</option>
        <option value="song1">Song 1</option>
        <option value="song2">Song 2</option>
        <!-- Add more songs as needed -->
      </select>

      <button type="submit">Save Playlist</button>
    </form>
  </div>
</main>

<footer>
  <p>&copy; 2023 Your Company | <a href="#">About</a> | <a href="#">Contact</a></p>
</footer>


</body>
</html>
