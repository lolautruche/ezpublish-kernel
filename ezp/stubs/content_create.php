<?php
/*
 * Assume that :
 * - $contentType is a valid content type object (formerly "content class") => \ezp\Content\ContentType
 * - $parentLocation is a valid Location (formerly "parent node") => \ezp\Content\Location
 */

use ezp\Content\Content;
use ezp\Content\Repository as ContentRepository;

// Here $contentType represent a "Folder"
// Current locale is eng-GB and fre-FR has been set in the system
$content = new Content( $contentType );
$content->fields['name'] = new ezp\Content\Fields\String( "My folder name" );
$content->fields['description'] = new ezp\Content\Fields\XMLText( "<p>This is the <strong>HTML description</strong></p>" );

// Now set an fre-FR translation
$content->translations["fre-FR"]->fields["name"] = new ezp\Content\Fields\String( "Nom du dossier" );
$content->translations["fre-FR"]->fields["description"] = new ezp\Content\Fields\XMLText( "<p>Ceci est la <strong>description HTML</strong></p>" );

// Get the content service from the repository and insert the new content
try
{
    $publishedContent = ContentRepository::get()->getContentService()->insert( $content, $parentLocation );
    echo $publishedContent; // Displays content "name"
}
catch ( ezp\Content\ValidationException $e )
{
    echo "Following validation issue occurred with your content : {$e->getMessage()}";
}

?>