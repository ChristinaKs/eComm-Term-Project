Feature: RefundOperation
  In order to return a product and get a refund
  As a customer
  I need to navigate to the ReturnAndRefund page and do the actions that are needed

  Scenario: Getting a refund for returning a product
    Given I am on Home page
    And logged into my customer account
    When I open the Menu bar to navigate to my orders page 
    And enter the name of the article that needs to be returned
    Then I should specify the reason why I want to get the refund 
    When I click on the button "Send request" to send the request to the seller about the refund
    Then the seller should receive the request
