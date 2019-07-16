<?php

namespace Deozza\PhilarmonyUtils\DataSchema;


class AuthorizedKeys
{
    const ENTITY_HEAD = "entities";
    const PROPERTY_HEAD = "properties";
    const ENUMERATION_HEAD = "enumerations";

    const ENTITY_KEYS = [
        "properties",
        "states",
        "constraints"
    ];

    const DEFAULT_STATE = "__default";

    const STATE_KEYS = [
        "methods",
        "constraints"
    ];

    const METHODS = [
        "POST",
        "PATCH",
        "GET",
        "DELETE"
    ];

    const METHOD_KEYS = [
        "properties",
        "by",
        "post_scripts"
    ];

    const BY_KEYS = [
        "users",
        "roles"
    ];

    const PROPERTY_KEYS = [
        "type",
        "constraints",
        "array",
    ];

    const TYPES = [
        "string",
        "int",
        "date",
        "float",
        "file",
        "enumeration",
        "entity",
        "embedded"
    ];

    const PROPERTY_CONSTRAINT_KEYS = [
        "required",
        "unique",
        "default",
        "automatic",
        "greaterThan",
        "lesserThan",
        "greaterThanOrEqual",
        "lesserThanOrEqual",
        "lengthMax",
        "lengthMin",
        "mime",
    ];

    const ENTITY_CONSTRAINT_KEYS = [
        'manual',
        'properties'
    ];

    const ENTITY_CONSTRAINT = [
        "greaterThan",
        "lesserThan",
        "greaterThanOrEqual",
        "lesserThanOrEqual",
        "notBetween",
        "between",
        "equal",
        "manual"
    ];

    const MIME_TYPES = [
        "text/csv",
        "image/gif",
        "image/jpeg",
        "image/jpg",
        "application/json",
        "video/mpeg",
        "image/png",
        "application/pdf",
        "application/xml"
    ];
}