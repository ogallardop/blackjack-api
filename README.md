# BlackJack-api
A RestFul API to play Black Jack OnLine, to manage request, conections, tables, game rules and users, for playing using any client like Mobile Apps or Web Clients

## Business rules

* A table can only be created for a logged user.
* 

## Examples

### DateTime sync

To sync your client datetime with the server, you can use the date method.

[GET] {url}/date

```json
{
  "current_date": "2016-11-02 22:20:03",
  "timezone": "America/Bogota"
}
```