[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/GoogleBooks/functions?utm_source=RapidAPIGitHub_GoogleBooksFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# GoogleBooks Package
That searches the full text of books and magazines that Google has scanned, converted to text using optical character recognition (OCR), and stored in its digital database.Books are provided either by publishers and authors, through the Google Books Partner Program, or by Google's library partners, through the Library Project. Additionally, Google has partnered with a number of magazine publishers to digitize their archives.

* Domain: [books.google.com](https://books.google.com/)
* Credentials: clientId, clientSecret

## How to get credentials: 
1. When you create your application, you register it using the [Google API Console](https://console.developers.google.com). Google then provides information you'll need later, such as a client ID and a client secret.
2. Activate the GoogleBook API in the Google API Console. (If the API isn't listed in the API Console, then skip this step.)
3. When your application needs access to user data, it asks Google for a particular scope of access.
4. Google displays a consent screen to the user, asking them to authorize your application to request some of their data.
5. If the user approves, then Google gives your application a short-lived access token.
 

 ## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```  
 
## GoogleBooks.getAccessToken
Get AccessToken.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client ID.
| clientSecret| credentials| Client secret.
| code        | String     | Code you received from Google after the user granted access
| redirectUri | String     | The same redirect URL as in received Code step.

## GoogleBooks.refreshToken
Get new accessToken by refreshToken.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client ID.
| clientSecret| credentials| Client secret.
| refreshToken| String     | A token that you can use to obtain a new access token. Refresh tokens are valid until the user revokes access. Again, this field is only present in this response if you set the access_type parameter to offline in the initial request to Google's authorization server.

## GoogleBooks.revokeAccessToken
In some cases a user may wish to revoke access given to an application. A user can revoke access by visiting Account Settings. It is also possible for an application to programmatically revoke the access given to it. Programmatic revocation is important in instances where a user unsubscribes or removes an application. In other words, part of the removal process can include an API request to ensure the permissions granted to the application are removed.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The token can be an access token or a refresh token. If the token is an access token and it has a corresponding refresh token, the refresh token will also be revoked.

## GoogleBooks.getBookshelfList
Retrieves a list of public Bookshelf resource for the specified user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token. Use getAccessToken to get it.
| userId     | String| ID of user for whom to retrieve bookshelves.
| source     | String| String to identify the originator of this request.

## GoogleBooks.getBookshelf
Retrieves a specific Bookshelf resource for the specified user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token. Use getAccessToken to get it.
| shelfId    | String| ID of bookshelf to retrieve.
| userId     | String| ID of user for whom to retrieve bookshelves.
| source     | String| String to identify the originator of this request.

## GoogleBooks.getVolume
Retrieves a Volume resource based on ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token. Use getAccessToken to get it.
| volumeId   | String| ID of volume to retrieve.
| partner    | String| Brand results for partner ID.
| projection | Select| Restrict information returned to a set of selected fields.`full` - Includes all volume data.`lite` - Includes a subset of fields in volumeInfo and accessInfo.
| source     | String| String to identify the originator of this request.

## GoogleBooks.getVolumeBySearchQuery
Performs a book search.

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| Access Token. Use getAccessToken to get it.
| searchQuery    | String| Full-text search query string.
| download       | Select| Restrict to volumes by download availability.`epub` - All volumes with epub.
| filter         | Select| Filter search results.`ebooks` - All Google eBooks.`free-ebooks` - Google eBook with full volume text viewability. `full` - Public can view entire volume text. `paid-ebooks` - Google eBook with a price.`partial` - Public able to see parts of text.
| langRestrict   | String| Restrict results to books with this language code.
| libraryRestrict| Select| Restrict search to this user's library.`my-library` - Restrict to the user's library, any shelf.`no-restrict` - Do not restrict based on user's library.
| maxResults     | Number| Maximum number of results to return. Acceptable values are 0 to 40, inclusive.
| orderBy        | Select| Sort search results.`newest` - Most recently published.`relevance` - Relevance to search terms.
| partner        | String| Brand results for partner ID.
| projection     | Select| Restrict information returned to a set of selected fields.
| showPreorders  | Select| Set to true to show books available for preorder. Defaults to false.
| source         | String| String to identify the originator of this request.
| startIndex     | Number| Index of the first result to return (starts at 0).

## GoogleBooks.getBookshelvesVolumes
Retrieves volumes in a specific bookshelf for the specified user.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access Token. Use getAccessToken to get it.
| shelfId      | String| ID of bookshelf to retrieve.
| userId       | String| ID of user for whom to retrieve bookshelves.
| maxResults   | Number| Maximum number of results to return. Acceptable values are 0 to 40, inclusive.
| showPreorders| Select| Set to true to show books available for preorder. Defaults to false.
| source       | String| String to identify the originator of this request.
| startIndex   | Number| Index of the first result to return (starts at 0).

## GoogleBooks.addVolumeToBookshelf
Adds a volume to a bookshelf.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token. Use getAccessToken to get it.
| shelfId    | String| ID of bookshelf to which to add a volume.
| volumeId   | String| ID of volume to add.
| source     | String| String to identify the originator of this request.

## GoogleBooks.deleteAllVolumesFromBookshelf
Adds a volume to a bookshelf.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token. Use getAccessToken to get it.
| shelfId    | String| ID of bookshelf to which to add a volume.
| source     | String| String to identify the originator of this request.

## GoogleBooks.getMyBookshelf
Retrieves metadata for a specific bookshelf belonging to the authenticated user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token. Use getAccessToken to get it.
| shelfId    | String| ID of bookshelf to which to add a volume.
| source     | String| String to identify the originator of this request.

## GoogleBooks.getMyBookshelfList
Retrieves a list of bookshelves belonging to the authenticated user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token.Use getAccessToken to get it.
| source     | String| String to identify the originator of this request.

## GoogleBooks.moveVolume
Moves a volume within a bookshelf.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access Token.Use getAccessToken to get it.
| shelfId       | String| ID of bookshelf to which to add a volume.
| volumeId      | String| ID of volume to move.
| volumePosition| String| Position on shelf to move the item (0 puts the item before the current first item, 1 puts it between the first and the second and so on.)
| source        | String| String to identify the originator of this request.

## GoogleBooks.removeVolumeFromBookshelves
Removes a volume from a bookshelf.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token.Use getAccessToken to get it.
| shelfId    | String| ID of bookshelf to which to add a volume.
| volumeId   | String| ID of volume to move.
| source     | String| String to identify the originator of this request.

## GoogleBooks.getMyBookShelvesVolumesList
Gets volume information for volumes on a bookshelf.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access Token.Use getAccessToken to get it.
| shelf        | String| The bookshelf ID or name retrieve volumes for.
| maxResults   | Number| Maximum number of results to return. Acceptable values are 0 to 40, inclusive.
| source       | String| String to identify the originator of this request.
| projection   | Select| Restrict information returned to a set of selected fields.`full` - Includes all volume data.`lite` - Includes a subset of fields in volumeInfo and accessInfo.
| searchQuery  | String| Full-text search query string.
| showPreorders| Select| Set to true to show books available for preorder. Defaults to false.
| startIndex   | Number| Index of the first result to return (starts at 0).

