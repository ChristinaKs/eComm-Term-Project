Feature: ContactOperation
  In order to Contact the seller
  As a customer
  I need to enter the ContactUs page and write a message to the seller

  Scenario: Sending an email to the seller with a logged in account
    Given I am on ContactUs page 
    And logged into my customer account
    Then I see a form to fill out with my name and message to the seller
    When I fill it out with my name and message to the seller
    And click "send message"
    Then my message should be emailed to the seller 

  Scenario: Sending an email to the seller without an account
    Given I am on ContactUs page 
    And do not have a customer account
    Then I see a form to fill out with my name, my email and message to the seller
    When I fill it out with my name, my email and message to the seller
    And click "send message"
    Then my message should be emailed to the seller 
