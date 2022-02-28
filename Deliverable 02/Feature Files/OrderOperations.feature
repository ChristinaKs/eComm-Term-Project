Feature: PlaceOrderOperation
  In order to place an order
  As a customer
  I need to go to the checkout page to compete the process

  Scenario: I am logged in an account and information about my debit/credit card with my shipping address are correct
    Given I am on Home page
    And logged into my customer account
    When I open the catalogue to choose the items to purchase
    And click on the "Shopping cart" icon
    Then I will be transferred to the checkout page 
    When I press the "Complete checkout" button
    Then I will be redirected to place the order

  Scenario: I am logged in an account and my debit/credit card information is correct, but not the shipping address info
    Given I am on Home page
    And logged into my customer account
    When I open the catalogue to choose the items to purchase
    And click on the "Shopping cart" icon
    Then I will be transferred to the checkout page 
    When I click on the "Modify shipping address" button
    Then I will see the Changing the address page 
    When I input all the information required about the shipping address in the fields
    And I press the "save address information" button
    Then I am redirected back to the "Checkout page"
    When I press the "Complete checkout" button 
    Then my order is placed
    
  Scenario: I am logged in an account and my shipping address info is correct, but not the debit/credit card info
    Given I am on Home page
    And logged into my customer account
    When I open the catalogue to choose the items to purchase
    And click on the "Shopping cart" icon
    Then I will be transferred to the checkout page 
    And I click on the "Add credit/debit card" button
    Then I will see the window to add a card pop up 
    When I input all the information required about the credit/debit card in the fields
    And I press the "add card information"
    Then I get back to the "Checkout page"
    When I press the "Complete checkout" button 
    Then my order is placed
    
Feature: CheckOrderStatusOperation
  In order to check order status
  As a customer
  I need to go to the orders page 

  Scenario: Checking the order status
    Given I am on Home page
    And logged into my customer account
    When I open the menu to navigate to Orders page
    And click "Active Orders" 
    Then I should see all the my (non-completed) orders with all the details including their status 

Feature: CancelOrderOperation
  In order to cancel order
  As a customer
  I need to go to the orders page 

  Scenario: Checking the order status
    Given I am on Home page
    And logged into my customer account
    When I open the menu to navigate to Orders page
    And click "Active Orders" 
    And check the order status
    Then I can see delete the order while it is "in process" status
    When I should click "recycle" icon on the top right of the order field
    Then I see the popping up window that asks to confirm the action
    When I click the "confirm" button
    Then my order is cancelled 
