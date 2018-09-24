<?php

namespace rikz\parser;

interface ParserInterface
{
	public function process(string $url, string $tag) :array;
}