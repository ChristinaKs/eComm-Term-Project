Feature: WebsiteOperations
  In order to update my website
  As an admin
  I need to have my new information ready and click on the correct items to change

  Scenario: Change the pictures within my website
    Given I am logged in as an admin
    And I have pictures to replace older ones with
    When I click "change picture" underneath the pictures in my website
    Then I am allowed to upload a picture from my computer files
    When I am done and click "change"
    Then the website should display the new picture

  Scenario: Updating my "about us" page
  Given I am logged in as an admin
  And I want to change the information on my "about us" page
  When I click on that page
  And it is displayed for me 
  When I click on the "edit" button
  Then I may add changes to the information on this page
  When I click "finished"
  Then my changes should be saved and the new information should be displayed on the website
