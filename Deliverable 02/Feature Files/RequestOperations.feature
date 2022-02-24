Feature: RequestOperations
  In order to view and respond to customer's requests
  As an Admin
  I need to be able to view the orders and their details

  Scenario: I want to view customer's request
    Gven I am logged in as an admin
    And on the "all orders" page
    Then I see a list of all orders
    When I click on one of the orders
    Then I can see the details of that order, including all the items, their prices and the comments(requests) left by the customers

  Scenario: I want to respond to a customer's request
    Gven I am logged in as an admin
    And on the "all orders" page
    Then I see a list of all orders
    When I click on one of the orders
    Then I can see the details of that order, including all the items, their prices and the comments(requests) left by the customers
    When I click "respond" 
    Then a popup allows me to write a response to the requests
    When I click "send"
    Then an email with my response is sent to the customer
