Feature: AddShippingAddressOperations
  In order to add shipping address
  As a customer
  I need to enter the profile page and add a shipping address

  Scenario: adding a shipping address while being logged in
    Given I am on Home page
    And logged into my customer account
    Then I need to move to the "Profile" page using the Menu bar
    And I should see my profile
    Then I click "edit" button 
    And see the editing page popping up
    Then I click "add shipping address" 
    And I see adding address page poppping up
    Then I fill out the fields with the information required
    And click "add address"
    Then I should see the new address displayed in the profile info
  
Feature: AddCardOperations
  In order to add a credit card
  As a customer
  I need to enter the profile page and add a credit card

  Scenario: adding a credit card while being logged in
    Given I am on Home page
    And logged into my customer account
    Then I need to move to the "Profile" page using the Menu bar
    And I should see my profile
    Then I click "edit" button 
    And see the editing page popping up
    Then I click "add a card" 
    And I see adding card page poppping up
    Then I fill out the fields with the information required
    And click "add a card"
    Then I should see the new card displayed in the profile info
