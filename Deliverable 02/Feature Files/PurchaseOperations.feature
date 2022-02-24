Feature: PurchaseOperations
  In order to ...
  As a ...
  I need to ...

  Scenario: I want to view all orders
    Given I am logged in as an admin
    When I click on the "all orders" button
    Then I can see a list of orders

  Scenario: I want to mark an order as shipped
    Given I am logged in as an admin
    When I click on the "all orders" button
    Then I can see a list of orders 
    When I click the checkbox that says "shipped"
    Then the website automates an email that sends to the client and lets them know their order was shipped

  Scenario: I want to give tracking to a shipped order
    Given I am logged in as an admin
    When I click on the "all orders" button
    Then I can see a list of orders 
    When I click the checkbox that says "shipped with tracking"
    Then a popup form allows me to fill out tracking information
    When I click "send"
    Then an email with the tracking information is sent to the customer