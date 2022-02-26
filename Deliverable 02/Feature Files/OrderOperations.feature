Feature: PlaceOrderOperation
  In order to place an order
  As a customer
  I need to go to the checkout page to compete the process

  Scenario: I am logged in an account and information about my debit/credit card with my shipping address are correct
    Given I am on Home page
    And logged into my customer account
    Then I open the catalogue to choose the items to purchase
    And click on the "Shopping cart" icon
    Then I will be transferred to the checkout page 
    And I press the "Complete checkout" button to place the order 

  Scenario: I am logged in an account and my debit/credit card information is correct, but not the shipping address info
    Given I am on Home page
    And logged into my customer account
    Then I open the catalogue to choose the items to purchase
    And click on the "Shopping cart" icon
    Then I will be transferred to the checkout page 
    And I click on the "Modify shipping address" button
    Then I will see the Changing the address page 
    And I will input all the information required about the shipping address in the fields
    Then I press the "save address information" button
    And I get back to the "Checkout page"
    Then I press the "Complete checkout" button to place the order 
    
  Scenario: I am logged in an account and my shipping address info is correct, but not the debit/credit card info
    Given I am on Home page
    And logged into my customer account
    Then I open the catalogue to choose the items to purchase
    And click on the "Shopping cart" icon
    Then I will be transferred to the checkout page 
    And I click on the "Add credit/debit card" button
    Then I will see the window to add a card pop up 
    And I will input all the information required about the credit/debit card in the fields
    Then I press the "add card information" button
    And I get back to the "Checkout page"
    Then I press the "Complete checkout" button to place the order 
    
Feature: CheckOrderStatusOperation
  In order to check order status
  As a customer
  I need to go to the orders page 

  Scenario: Checking the order status
    Given I am on Home page
    And logged into my customer account
    Then I open the menu to navigate to Orders page
    And click "Active Orders" 
    Then I should see all the active (non-completed) orders with all the details including their status 

Feature: CancelOrderOperation
  In order to cancel order
  As a customer
  I need to go to the orders page 

  Scenario: Checking the order status
    Given I am on Home page
    And logged into my customer account
    Then I open the menu to navigate to Orders page
    And click "Active Orders" 
    Then check the order status
    And see if I can yet delete the order while it is "in process" status
    Then I should click "recycle bin" icon on the top right of the order field
    And see the popping up window that asks to confirm the action
    Then I click the "confirm" button to complete the process
