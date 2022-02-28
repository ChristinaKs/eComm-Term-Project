Feature: OrderHistoryOperation
  In order to check order history
  As a customer
  I need to open the order history page and view the order history

  Scenario: Checking Order History while being alrady logged in
    Given I am on Home page
    And logged into my customer account
    When I open the Menu bar to navigate to the OrderHistory page 
    And click "Order History"
    Then I should see my Order History with all the purchased
